# Plant Disease Detection and Classification

## 프로젝트 개요 (수정전 프론트엔드만 포함)

이 프로젝트는 사용자가 식물의 잎 사진을 업로드하고, 해당 사진에서 잎의 데이터를 추출한 후, 인공지능(CNN) 모델을 통해 질병 여부와 식물의 종을 판별하는 웹 애플리케이션입니다. 식물의 질병이 감지되면, GPT 모델을 사용하여 질병에 대한 설명과 해결 방안을 제공하여 사용자가 적절히 대처할 수 있도록 돕습니다.

## 주요 기능

1. **식물 사진 업로드 및 삭제 기능**
   - 사용자는 식물의 잎 사진을 웹 애플리케이션에 업로드할 수 있습니다.
   - 업로드된 사진은 필요시 삭제할 수 있습니다.

2. **식물의 질병 감염 여부 예측 기능**
   - 사용자가 업로드한 사진에서 잎의 부분을 포인터로 지정하여, 잎의 데이터만 정확히 추출할 수 있습니다.
   - CNN 인공지능 모델을 사용하여 잎의 질병 여부를 예측합니다.
   - 예측된 질병 이름은 GPT 모델로 전송되어 질병에 대한 상세한 설명과 해결 방안을 제공합니다.

3. **식물의 종 판별 기능**
   - 업로드된 사진을 통해 식물의 종을 판별합니다.
   - 판별된 식물 종 정보도 함께 제공됩니다.

4. **마이페이지를 통한 사용자의 식물 사진 관리 기능**
   - 사용자는 마이페이지에서 본인이 업로드한 식물 사진을 관리할 수 있습니다.
   - 사진의 업로드 날짜, 질병 진단 결과, 식물 종 정보 등을 확인할 수 있습니다.

## 시나리오

1. 사용자가 식물의 잎 사진을 촬영하여 웹 애플리케이션에 업로드합니다.
2. 사진에서 잎 부분을 포인터로 지정하여 해당 부분의 데이터를 정확히 추출합니다.
3. 추출된 데이터는 CNN 인공지능 모델을 통해 분석되며, 질병 여부와 질병 이름이 출력됩니다.
4. 질병 이름은 GPT 모델에 전송되어 해당 질병에 대한 설명과 해결 방안을 제공합니다.
5. 사용자는 웹 애플리케이션에서 분석 결과와 함께 식물 관리 정보를 확인할 수 있습니다.

